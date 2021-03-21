// JavaScript Document
    $(document).ready(function () {
        let resp = $('.response');
        resp.hide();
        $('.btn').click(function () {
            $('.response .response_table').empty();

            let bills = $('[name=bills]').val();
            let sum = $('[name=sum]').val();

            $.ajax({
                url: 'php/Task3/Task3.php',
                type: "POST",
                data: {bills: bills, sum: sum},
                success: function (res) {
                    resp.show();
                    let result = JSON.parse(res);
                    if (result.result == 'complete') {
                        resp.show();
                        $('.result').html('<table class="response_table"><tr><th>Номинал</th><th>Количество</th></tr>');
                        $.each(result.bills, function (index, value){
                            $('.response_table').append(
                                '<tr>' +
                                '<td>' + index + '</td>' +
                                '<td>' + value + '</td>' +
                                '</tr>')
                        });
                        $('.result').append('</table>');
                    } else if (result.result == 'error') {
                        $('.result').empty();
                        $('.result').html(result.error);
                    } else if (result.result == 'warn') {
                        $('.result').empty();
                        $('.result').append(result.warn);
                    }
                }
            })
        });
    });
