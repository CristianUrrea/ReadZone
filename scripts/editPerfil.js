$(document).ready(function(){
  inter_en = {
      cancel: 'Cancel',
      clear: 'Clear',
      done:    'Ok',
      previousMonth:    '‹',
      nextMonth:    '›',
      months:    [
          'January',
          'February',
          'March',
          'April',
          'May',
          'June',
          'July',
          'August',
          'September',
          'October',
          'November',
          'December'
      ],
      monthsShort:    [
          'Jan',
          'Feb',
          'Mar',
          'Apr',
          'May',
          'Jun',
          'Jul',
          'Aug',
          'Sep',
          'Oct',
          'Nov',
          'Dec'
      ],

      weekdays:    [
          'Sunday',
          'Monday',
          'Tuesday',
          'Wednesday',
          'Thursday',
          'Friday',
          'Saturday'
      ],

      weekdaysShort:    [
          'Sun',
          'Mon',
          'Tue',
          'Wed',
          'Thu',
          'Fri',
          'Sat'
      ],

      weekdaysAbbrev:    ['S', 'M', 'T', 'W', 'T', 'F', 'S']
  };


  inter_es = {
      cancel: 'Cancelar',
      clear: 'Limpiar',
      done:    'Ok',
      previousMonth:    '‹',
      nextMonth:    '›',
      months:    [
          'Enero',
          'Febrero',
          'Marzo',
          'Abril',
          'Mayo',
          'Junio',
          'Julio',
          'Agosto',
          'Septiembre',
          'Octubre',
          'Noviembre',
          'Diciembre'
      ],
      monthsShort:    [
          'Ene',
          'Feb',
          'Mar',
          'Abr',
          'May',
          'Jun',
          'Jul',
          'Ago',
          'Sep',
          'Oct',
          'Nov',
          'Dic'
      ],

      weekdays:    [
          'Domingo',
          'Lunes',
          'Martes',
          'Miércoles',
          'Jueves',
          'Viernes',
          'Sábado'
      ],

      weekdaysShort:    [
          'Dom',
          'Lun',
          'Mar',
          'Mié',
          'Jue',
          'Vie',
          'Sáb'
      ],

      weekdaysAbbrev:    ['D', 'L', 'M', 'M', 'J', 'V', 'S']

  };

  var options = {
      i18n: inter_es,
      format: "dd/mm/yyyy"

  };
  var elem = document.querySelector('.datepicker');
  var instance = M.Datepicker.init(elem, options);

  $(".tabs").tabs();

  });
