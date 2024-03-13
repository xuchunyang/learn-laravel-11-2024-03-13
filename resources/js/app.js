import './bootstrap';

const ul = document.querySelector('ul');
const form = document.querySelector('form');

const sendMessage = async (event) => {
    event.preventDefault();
    try {
        const resp = await fetch('/api/message', {
            method: 'post',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
            },
            body: new FormData(form),
        });
        const data = await resp.json();

        console.log(data);
        form.reset();
    } catch (e) {
        alert('发送失败: ' + e.message);
    }
};

const showMessage = (message) => {
    const li = document.createElement('li');
    li.textContent = message;
    ul.appendChild(li);
};

form.addEventListener('submit', sendMessage);

Echo.channel('greeted-channel')
    .listen('Greeted', (e) => {
        console.log(e);
        showMessage(e.message)
    });
