/**
 * Created by Zura on 4/5/2016.
 */

$(function () {

    Lobibox.notify.DEFAULTS = $.extend({}, Lobibox.notify.DEFAULTS, {
        size: 'mini',
        // delay: false,
        position: 'right top'
    });

    //Basic example
    $('#todo-lists-basic-demo').lobiList({
        lists: [
            {
                title: 'Chiller #1',
                defaultStyle: 'lobilist-info',
                items: [
                    {
                        title: 'Task 1',
                        description: 'This is a description of Task 1',
                        dueDate: '2016-01-31'
                    },
                    {
                        title: 'Task 2',
                        description: 'This is a description of Task 2',
                        dueDate: '2016-01-31',
                        done: true,
                    },                    
                    {
                        title: 'Task 3',
                        description: 'This is a description of Task 3',
                        dueDate: '2016-01-31',
                    },                ]
            },
            {
                title: 'Chiller #2',
                defaultStyle: 'lobilist-danger',
                items: [
                    {
                        title: 'Task 1',
                        description: 'This is a description of Task 1',
                        dueDate: '2016-01-31'
                    },
                    {
                        title: 'Task 2',
                        description: 'This is a description of Task 2',
                        dueDate: '2016-01-31',
                    },                    
                    {
                        title: 'Task 3',
                        description: 'This is a description of Task 3',
                        dueDate: '2016-01-31',
                    },                ]
            },
            {
                title: 'Heat Trace',
                defaultStyle: 'lobilist-info',
                items: [
                    {
                        title: 'Task 1',
                        description: 'This is a description of Task 1',
                        dueDate: '2016-01-31'
                    },
                    {
                        title: 'Task 2',
                        description: 'This is a description of Task 2',
                        dueDate: '2016-01-31',
                    },                    
                    {
                        title: 'Task 3',
                        description: 'This is a description of Task 3',
                        dueDate: '2016-01-31',
                        done: true,
                    },                ]
            },
        ]
    });
});