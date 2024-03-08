import Echo from 'laravel-echo';
import Pusher from 'pusher-js';
 
window.Pusher = Pusher;
 
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true
});

window.Echo.channel('order.status')
    .listen('OrderListEvent', (event) => {
        console.log(event.order_status);
        // ดำเนินการที่ต้องการกับข้อมูลที่เปลี่ยนแปลง
});

console.log("HIHI")