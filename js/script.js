var app = new Vue({
    el: '#app',
    data: {
        apiUrl: 'app/server.php',
        disks: [],
        genres: [],
        genre: '',
        error: false
    },
    methods: {
        filterGenre() {
            axios.get(this.apiUrl + '?genre=' + this.genre)
                .then(resp => {
                    this.error = false;
                    this.disks = resp.data;
                }).catch(err => {
                    if (err.response.status === 400)
                        this.error = true;
                });
        }
    },
    mounted() {
        axios.get(this.apiUrl).then(resp => {
            this.disks = resp.data;

            resp.data.forEach(el => {
                if (!this.genres.includes(el.genre))
                    this.genres.push(el.genre);
            });
        });
    }
});
Vue.config.devtools = true;