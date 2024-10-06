$(document).ready(function() {
    var calendar = $('#calendar').fullCalendar({
        header: {
            left: 'prev, next today',
            center: 'title',
            right: 'month, agendaWeek, agendaDay'
        },
        editable: true,
        events: [], 

        dayClick: function(date, jsEvent, view) {
            $('#eventModal').modal('show');
            $('#eventModal').data('date', date); // Lưu ngày để thêm sự kiện
        },

        eventRender: function(event, element) {
            // Thêm tooltip vào sự kiện
            element.tooltip({
                title: event.title,
                placement: 'top',
                trigger: 'hover'
            });
        },

        eventClick: function(event) {
            currentEvent = event; // Lưu sự kiện hiện tại
            $('#editEventTitle').val(event.title); // Điền tiêu đề sự kiện vào modal
            $('#editEventModal').modal('show'); // Hiện modal sửa
        }
    });

    $('#addEvent').on('click', function() {
        var title = $('#eventTitle').val();
        var date = $('#eventModal').data('date');

        if (title) {
            calendar.fullCalendar('renderEvent', {
                title: title,
                start: date,
                allDay: true
            }, true); // true để không xóa sự kiện

            $('#eventModal').modal('hide');
            $('#eventTitle').val('');
        }
    });

    $('#saveEventChanges').on('click', function() {
        var newTitle = $('#editEventTitle').val(); // Lấy tiêu đề mới
    
        if (newTitle) {
            currentEvent.title = newTitle; // Cập nhật tiêu đề
            $('#calendar').fullCalendar('updateEvent', currentEvent); // Cập nhật sự kiện trong lịch
            $('#editEventModal').modal('hide'); // Đóng modal
        }
    });
});
