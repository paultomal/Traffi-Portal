// -------------------------------------------------------------------------------------------------variable section
var left_labaels_data = ['Morning', 'Afternoon', 'Night'];
var left_chart_data =[50,50,50 ];
//monthly data chart ajax 
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'pie',
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
        http.open('get','tpi/leftchartdata', true);
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

// --------------------------------------------------------------------------------------------------function section


//for live employee data
function details(employe_id) {

    let id = employe_id;
    var link = "/tpi/demploye/" + id;
    //console.log(id);
    let http = new XMLHttpRequest();
    http.open('get', link, true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send();
    http.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            //console.log(this.responseText);
            if (this.responseText == "data not found") {
                // document.getElementById('notfound').innerHTML = "Data not found";
                //console.log("data not found")
            } else {
                //document.getElementById('notfound').innerHTML = "";
                var data = JSON.parse(this.responseText);
                console.log(data);
                var html = " ";
                for (var i = 0; i < data.length; i++) {
                    var em_id = data[i].emplyee_id;
                    var name = data[i].employe_name;

                    /*console.log(insertdata);
                    console.log(link);*/


                    html += "<img class='rounded-circle' src='https://mdbcdn.b-cdn.net/img/new/avatars/9.webp' />"
                    html += "<h1>" +
                        name +
                        "</h1>";
                    html += "<h1>" +
                        em_id +
                        "</h1>";
                    html += "<button onclick='email()' type='button' class='btn btn-primary'>Email</button>"






                }
                document.getElementById("detils_table").innerHTML = html;

            }



        }
    }
}

function email() {
    document.getElementById("popup").style.display = "block";
    console.log("cliked")
}

function cnclemail() {
    document.getElementById("popup").style.display = "none";
}

//chart on left side code
