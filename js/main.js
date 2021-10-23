Vue.config.devtools = true;

const App = new Vue ({
    el: '#root',
    data:{
        toggle: false,
    },
    methods:{
        bigPicture(){
            this.toggle=!this.toggle;
        }
    }
})