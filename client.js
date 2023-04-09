const socket =io('http://localhost:8000');

const form =document.getElementById('send-container');
const messageInput=document.getElementById('messageInp');
const messageContainer=document.querySelector(".container");
var audio=new Audio('ting.mp3'); 



const name1 = prompt("Enter your name to join");
// const name1 = "AlKiran";



socket.emit('new-user-joined',name1);

form.addEventListener('submit',(e)=>{
    e.preventDefault();
    const message = messageInput.value;
    append(`You: ${message}`,'right');
    socket.emit('send',message);
    messageInput.value='';
})



const append=(message,position)=>{
    const messageElement=document.createElement('div');
    messageElement.innerText=message;
    
    messageElement.classList.add('message');
    messageElement.classList.add(position);
    messageContainer.append(messageElement);
    if(position=='left'){audio.play();}
}
socket.on('user-joined',name1=>{
    append(`${name1} joined the chat`,'left');
})


socket.on('receive',data=>{
    append(`${data.name} : ${data.message}`,'left');
})


socket.on('left',name1=>{
    append(`${name1} left the chat`,'left');
})