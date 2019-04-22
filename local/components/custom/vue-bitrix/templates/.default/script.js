window.addEventListener('load', function () {
   BX.Vue.component('app-component', {
       data: function() {
           return  {
               name: 'Андрей'
           }
       },
       props: {
           id: Number,
           postfix: String
       },
       template: '<h2>Привет, {{name}}{{postfix}}</h2>'
   });

    BX.Vue.create({
        el: '#app',
        template: '<app-component v-bind:id="1" postfix="!"></app-component>'
    })
});