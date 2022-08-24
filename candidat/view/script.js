var domain={
domain1:['speciality1 1', 'speciality1 2', 'specialy 1 3'], 
domain2:['speciality2 1', 'speciality2 2', 'speciality2 3'], 
domain3:['speciality3 1', 'speciality3 2', 'speciality3 3'],
domain4:['speciality4 1', 'speciality4 2', 'speciality4 3']

}
// getting the main and sub menus
 var dom= document.getElementById('domain');
 var sep = document.getElementById('specialite');
// Trigger the Event when main menu change occurs
dom.addEventListener('change', function(){
// getting a selected option
var selected_option = domain[this.value];
// removing the sub menu options using while loop
while(sep.options.length > 0){
    sep.options.remove(0);
}
    //conver the selected object into array and create a options for each array elements //using Option constructor it will create html element with the given value and innerText
    Array.from(selected_option).forEach(function(el) {
        let option = new Option(el, el);
        //append the child option in sub menu
        sep.appendChild(option);

        
    



    });
});
