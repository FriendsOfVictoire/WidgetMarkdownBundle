new Vue({
  el: '#markdown-widget-editor',
  data: {
    input: '# hello'
  },
  filters: {
    marked: marked
  }
});