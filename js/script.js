const { createApp } = Vue;


createApp({

    data(){
        return{
            apiUrl: 'server.php',
            discList: [],
            singleDisc: {},
            showDiscDetail: false
        }
    },
    methods:{
        getDiscs(){
            axios.get(this.apiUrl)
             .then(r => {
                this.discList = r.data;
             })
        },
        getDiscDetail(index){
            const params = {
                discIndex: index
            }

            axios.get(this.apiUrl, { params })
                .then( r => {
                    this.showDiscDetail = true;
                    this.singleDisc = r.data;
                })
        }
    },
    mounted(){
        this.getDiscs();
    }

}).mount('#app');