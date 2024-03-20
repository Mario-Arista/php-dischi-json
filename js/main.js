const { createApp } = Vue;

createApp({
    data() {
        return {
            // Tutti id dischi
            disks: [],

            // array per bonus
            selecteDisk: [],

            // Boleano per bonus
            showDetails: false,
        }
    },

    mounted() {

        axios.get('./server.php').then(res => {
            console.log(res.data);

            this.disks = res.data;
            
        });

    },

    methods: {

        showDiskDetails(discIndex) {

            axios.get('./server.php').then(res => {
                
    
                this.selecteDisk = res.data[discIndex];
                this.showDetails = true;

                console.log(res.data[discIndex]);
            });


        },

        hideDiskDetails() {

            this.showDetails =  false;
        }
    },

}).mount('#app');