window.addEventListener('load', function () {
   BX.Vue.component('app-component', {
       data: {
           name: 'Андрей'
       },
       props: {
           postfix: ''
       },
       template: '<h2>Привет, {{name}}</h2>'
   });

    BX.Vue.create({
        el: '#app',
        template: '<app-component postfix="!"></app-component>'
    })
});