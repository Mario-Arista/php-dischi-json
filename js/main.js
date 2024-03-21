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
        showDiskDetails(index) {

            axios.get('./server.php').then(res => {
                
    
                this.selecteDisk = res.data[index];
                this.showDetails = true;

                console.log(res.data[index]);
            });


        },

        // Funzione per mostrare nascondere elemento al click sulla freccia
        hideDiskDetails() {

            this.showDetails =  false;
        }
    },

}).mount('#app');