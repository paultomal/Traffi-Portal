
    //for live employee data
    function preview(tp_id)
    {
        
        let id = tp_id;
        var link = "/ai/demploye/"+id;
        //console.log(id);
        let http = new XMLHttpRequest();
                    http.open('get', link, true);
                    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    http.send();
                    http.onreadystatechange = function()
                    {
                        
                        if(this.readyState == 4 && this.status == 200)
                        {
                            //console.log(this.responseText);
                            if(this.responseText == "data not found"){
                               // document.getElementById('notfound').innerHTML = "Data not found";
                                //console.log("data not found")
                            }
                            else
                            {
                                //document.getElementById('notfound').innerHTML = "";
                                var data =  JSON.parse(this.responseText);
                                console.log(data);
                                var html = " ";
                                html+=    "<table>"
                                html+=    "<th> Employee ID </th><th> Employee Name </th><th> Status </th>"
                                for (var i = 0; i<data.length;i++) {
                                    var id = data[i].emplyee_id ;
                                    var name = data[i].employe_name;
                                    var status = data[i].status;
                                
                                /*console.log(insertdata);
                                console.log(link);*/
                               
                                html+=    "<tr>"
                                html+=     "<td>"+id+"</td>";
                                html+=     "<td>"+name+"</td>";
                                html+=     "<td>"+status+"</td>";
                                html+=     "</tr>"

                            }
                            html+=     "</table>"
                            document.getElementById("detils_table").innerHTML = html;
                              //console.log("working");
                            }



                        }
                    }
    }


var left_labaels_data = ['Morning', 'Afternoon', 'Night'];
var left_chart_data =[50,50,50 ];
//monthly data chart ajax 
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels:left_labaels_data,
        datasets: [{
            label: 'Daily vechile',
            data: left_chart_data,
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 159, 64)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 5
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

//chart combo box function

function chartt()
{
   
    let data = document.getElementById("chart_option_one");
    var text = data.options[data.selectedIndex].text;

    if(text == 'Daily'){            

        console.log(text)
        let http = new XMLHttpRequest();
        http.open('get','/tpi/leftchartdata/daily', true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send();
        http.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {
                //console.log(this.responseText);
                if (this.responseText == "data not found") {
                    
                } else {
                    var data = JSON.parse(this.responseText);
                    console.log(data);
                    var html = " ";
                    for (var i = 0; i < data.length; i++) {
                        var   morning = data[i].morning;
                        var   afternoon = data[i].afternoon;
                        var   night = data[i].night;
                        value = [morning, afternoon,night];
                        myChart.data.datasets[0].data = value;
                        myChart.update();
                        console.log(value);
                    }
                }
            }
        }


    }//end of if
    else{
        console.log(text)
        let http = new XMLHttpRequest();
        http.open('get','ai/leftchartdata', true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send();
        http.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {
                //console.log(this.responseText);
                if (this.responseText == "data not found") {
                    
                } else {
                    var data = JSON.parse(this.responseText);
                    console.log(data);
                    var html = " ";
                    for (var i = 0; i < data.length; i++) {
                        var   morning = data[i].morning;
                        var   afternoon = data[i].afternoon;
                        var   night = data[i].night;
                        value = [morning, afternoon,night];
                        myChart.data.datasets[0].data = value;
                        myChart.update();
                    }
                }
            }
        }
    }//end of else

    }//end of chart function



//2nd chart.js
const ctx2 = document.getElementById('2ndchart').getContext('2d');
const myChart2 = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: 'Daily vechile',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 159, 64)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 5
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


