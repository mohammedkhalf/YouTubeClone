Vue.component('subscribe-button' , {
    props : {
        subscriptions : {
            type : Array,
            required : true,
            default: () =>[]
        }
    },
    methods:{
        toggleSubscription(){
            if(! __auth()){
                alert("please Login to subscribe")
            }
        }
    }

});
