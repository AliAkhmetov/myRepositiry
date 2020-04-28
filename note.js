var outgoMess= document.getElementById('outgoMess');
formElem.onsubmit = (e) => {
   e.preventDefault();
   var unserializedData = $(formElem).serializeArray();
   var serializedData = customSerialize(unserializedData);
   var response = $.post('main.php', serializedData).then(function(result){
     // console.log('asadas');
     document.location = '/myRepository/Chat';


 });
}


function customSerialize(data) {
  const jsonArr = {};
  for(let i in data){
    jsonArr[data[i].name] = data[i].value;
  }
  return jsonArr;
}
