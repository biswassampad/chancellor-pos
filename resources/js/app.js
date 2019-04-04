
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('food-item', require('./components/FoodItem.vue').default);
Vue.component('add-customer-res', require('./components/AddCustomerRes.vue').default);
Vue.component('list-items', require('./components/Listitems.vue').default);
Vue.component('un-done', require('./components/Undone.vue').default);
Vue.component('list-room', require('./components/Listroom.vue').default);
Vue.component('hotel-orderlist', require('./components/HotelOrderList.vue').default);
Vue.component('application-form', require('./components/ApplicationForm.vue').default);
Vue.component('event-form', require('./components/EventForm.vue').default);
Vue.component('request-hot', require('./components/Requests.vue').default);
Vue.component('room-availibility', require('./components/RoomAvailibility.vue').default);
Vue.component('event-availibility', require('./components/EventAvailibility.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data:{
        list:[],
        search:'',
        order:{},
        rooms:[],
        roomresponse:'',
        hrequest:[],
        erequest:[],
        hoteldate:'',
        eventdate:'',
    },
    mounted() {
        axios.get('/api/getorders',{})
        .then(response =>{
           this.order=response.data;
           // console.log(response.data);
        }).catch((error)=>{
            console.log(error);
        });

        axios.get('/api/hnotif',{})
        .then((response)=>{
            this.hrequest=response.data;
        }).catch((error)=>{
            console.log(error);
        });
        
        axios.get('/api/enotif',{})
        .then((response)=>{
            this.erequest=response.data;
        }).catch((error)=>{
            console.log(error);
        });
    },
    method:{
        printme() {
            window.print();
        },
        bookroom(){

        },
        generatehotelorder($id){
            console.log($id);
        },
        searchrooms(){
            console.log(this.hoteldate);
        }
    }
});
