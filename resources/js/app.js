require('./bootstrap');
window.Vue = require('vue');


// Regular behavior
import HomeLinks from './html-components/HomeLinks'

// SET DEBUG MODE
window.debug = true
// Import helper like this
// import { debug } from './helpers/debug'

/* VUE usage
* we're gonna use Vue to declare components and reuse 'em
* plain html components are stored into html-components directory
*/


const vueapp = new Vue({
  el: '#main-root',
  components: {
    HomeLinks  // 'home-links': HomeLinks
  },
  // template: '<App />'  // We'll not use template
});

// Bind to window to allow access from navigator console
window.vueapp = vueapp

console.log("hello from VUE", window.vueapp);
