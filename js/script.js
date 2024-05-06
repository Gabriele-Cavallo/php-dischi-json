const { createApp } = Vue;

createApp({
   data() {
        return {
            discs: [],
            singleDisc: false,
            activeDisc: '',
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
            if(this.discs.length <= 1){
                axios.get('server.php')
                .then((response) => {
                    this.discs = response.data;
                });
                this.singleDisc = false;
            } else {
                this.activeDisc = index;
                const queryParams = {
                    discChoice : this.activeDisc,
                };
                axios.get('server.php', {
                    params: queryParams
                })
                .then((response) => {
                    this.discs = [];
                    this.discs.push(response.data);
                });
                this.singleDisc = true;
            }
        },
    },
    mounted() {
        this.getDiscsFromApi();
    }
}).mount('#app');