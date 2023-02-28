// $(document).ready(function Hello(){
//     $("#chercher").click(function(){
//         var str = $("#search").val();
//         var str1 = "Algébre";
//         if(str === str1){
//             $("#algébre").hide();
//         }
//       });
// })
function Hello(event){
    event.preventDefault();
    var str = document.getElementById('search').value;
    var str1 = "algebre";
    var str2 = "analyse";
    var array1 = document.querySelectorAll('#algébre');
    var array2 = document.querySelectorAll('#analyse');

    if(str.toLowerCase() === str2){
        for (let index = 0; index < array1.length; index++) {
            array1[index].style.display = 'none';    
        }
        for (let index = 0; index < array2.length; index++) {
            array2[index].style.display = 'block';
        }
    }
    else if(str.toLowerCase() === str1){
        for (let index = 0; index < array2.length; index++) {
            array2[index].style.display = 'none';
        }
        for (let index = 0; index < array1.length; index++) {
            array1[index].style.display = 'block';    
        }
    }
}

function Affiche(){
    document.getElementById('drop').style.display = 'block';
}

function Hide(){
    document.getElementById('drop').style.display = 'none';
}
