require("./bootstrap");

window.Vue = require("vue");

// Vue.component("App", require("./components/App.vue").default);

import router from "./router";
Vue.component("hd", require("./components/Header.vue").default);
Vue.component("ft", require("./components/Footer.vue").default);

const app = new Vue({
    el: "#app",
    router
});
