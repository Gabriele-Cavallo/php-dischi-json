const { createApp } = Vue;

createApp({
   data() {
        return {
            discs: [],
            singleDisc: false,
        };
    },
    methods: {
        getDiscsFromApi(){
            axios.get('server.php')
            .then((response) => {
                this.discs = response.data;
            });
        },
        getSingleDiscsFromApi(index){
            axios.get('server.php')
            .then((response) => {
                if(this.discs.length <= 1){
                    axios.get('server.php')
                    .then((response) => {
                        this.discs = response.data;
                    });
                    this.singleDisc = false;
                } else {
                    this.discs = [];
                    this.discs.push(response.data[index]);
                    this.singleDisc = true;
                }
            });
        },
    },
    mounted() {
        this.getDiscsFromApi();
    }
}).mount('#app');