function searchEmp(){
    let searchTerm = $("#txtSearch").val();
    var baseurl = window.location.origin;
    // console.log(baseurl);
    let url = baseurl+'/site/emp-names';
    // console.log(url); 
    $.ajax(url,{
        data:{searchTxt:searchTerm},
        type: 'POST',
        success: function(response){
            if(response.data.empNames.length > 0){
                console.log(response.data.success);
                // console.log(response.data.empNames[0]);
                var empList = "<table cellspacing='20px' cellpadding='10px' border='1px' style='margin-left: 35%;'>"
                              +"<thead><th>First Name</th><th>Last Name</th><th>Nicname</th></thead>"
                              +"<tbody>";
                // $("#search_suggest").val("<p>"+response.data.empNames[0]+"</p>");
                response.data.empNames.forEach(element => {
                    empList+="<tr><td>"+element.fName+"</td><td>"+element.lName+"</td><td>"+element.nicName+"</td></tr>";
                });
                empList+="</tbody>"
                         +"</table>";

                // document.getElementById('search_suggest').innerHTML= "<p>"+response.data.empNames[0]+"</p>";
                document.getElementById('searchPara').innerHTML= empList;
            }else{
                console.log("<p>No Employee with this name is present</p>");
                document.getElementById('searchPara').innerHTML= "<p>No Employee with this name is present</p>";
                // $("#search_suggest").val("<p>No Employee with this name is present</p>");
            }
            
        },
        error: function(response){
            console.log(response);
        }
    });
}
