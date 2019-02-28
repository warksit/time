Nova.booting((Vue, router, store) => {
    Vue.component('index-Time', require('./components/IndexField'))
    Vue.component('detail-Time', require('./components/DetailField'))
    Vue.component('form-Time', require('./components/FormField'))
})
