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

        // Funzione per mostrare elemento nascosto con chiamata API
        showDiskDetails(discIndex) {

            axios.get('./server.php').then(res => {
                
    
                this.selecteDisk = res.data[discIndex];
                this.showDetails = true;

                console.log(res.data[discIndex]);
            });


        },

        // Funzione per mostrare nascondere elemento al click sulla freccia
        hideDiskDetails() {

            this.showDetails =  false;
        }
    },

}).mount('#app');