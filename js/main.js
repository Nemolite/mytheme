/**
 * Скрипты темы
 */
console.log('test');

/**
 * Работа табов
 */
var jsTriggers = document.querySelectorAll('.js-tab-trigger'),
    jsContents = document.querySelectorAll('.js-tab-content');
jsTriggers.forEach(function(trigger) {
   trigger.addEventListener('click', function() {
      var id = this.getAttribute('data-tab'),
          content = document.querySelector('.js-tab-content[data-tab="'+id+'"]'),
          activeTrigger = document.querySelector('.js-tab-trigger.active'),
          activeContent = document.querySelector('.js-tab-content.active');
      
      activeTrigger.classList.remove('active'); // 1
      trigger.classList.add('active'); // 2
      
      activeContent.classList.remove('active'); // 3
      content.classList.add('active'); // 4
   });
});

/**
 * День-ночь
 */

 var data = new Date();
 var obj=document.getElementById("myColor");

 if (data.getHours() > 0 && data.getHours() < 6) {
    obj.style.color = pink;
    obj.style.background = blue;
 }else{
    obj.style.color = '#000';
    obj.style.background = '#40C4FF';
 }



/**
 * Работа супер табов
 */
 var jsTriggersSuper = document.querySelectorAll('.js-tab-trigger-super'),
 jsContentsSuper = document.querySelectorAll('.js-tab-content-super');
jsTriggersSuper.forEach(function(trigger) {
trigger.addEventListener('click', function() {
   var id = this.getAttribute('data-tab'),
       content = document.querySelector('.js-tab-content-super[data-tab="'+id+'"]'),
       activeTrigger = document.querySelector('.js-tab-trigger-super.active'),
       activeContent = document.querySelector('.js-tab-content-super.active');
   
   activeTrigger.classList.remove('active'); // 1
   trigger.classList.add('active'); // 2
   
   activeContent.classList.remove('active'); // 3
   content.classList.add('active'); // 4
});
});


