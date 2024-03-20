const { createApp } = Vue;

createApp({
    data() {
        return {
            disks: [],
        }
    },

    mounted() {

        axios.get('./server.php').then(res => {
            console.log(res.data);

            this.disks = res.data;
        });

    },
}).mount('#app');