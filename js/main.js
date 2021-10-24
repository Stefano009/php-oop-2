Vue.config.devtools = true;

const App = new Vue ({
    el: '#root',
    data:{
        toggle:false,
    },
    methods:{
        goToForm(){
            window.location.href = 'http://localhost/php-oop-2/php-oop-2/form.php';
        }
    }
    
})