// 
// $('#chatAria1').load(function() {
//   $('#chatAria1').animate({ scrollTop: $('#chatAria1').prop("scrollHeight") }, 1000);
// });
formElem.onsubmit = (e) => {
   e.preventDefault();
   var unserializedData = $(formElem).serializeArray();
   var serializedData = customSerialize(unserializedData);
   var response = $.post('writeToDB.php', serializedData).then(function(result){
 console.log('asadas');
 });
 $("div.chatAria1").empty()
 getmesseges();

};

function customSerialize(data) {
  const jsonArr = {};
  for(let i in data){
    jsonArr[data[i].name] = data[i].value;
  }
  return jsonArr;
};



$(document).ready(getmesseges());

function getmesseges(){
    $.get("getmessegesDB.php", function(data){
      const parsedData = JSON.parse(data);
      $.each(parsedData, function (index, value) {
        var text = value['TEXT'];
        console.log(text);
        var messdiv=  $('<div class="outgoMess"></div>').appendTo('#chatAria1');
        $(messdiv).html(text);
      });
    });
}
