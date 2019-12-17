function updateUser(id,mod,button){
    let confirmation=confirm("Are you sure you want to "+mod+" this user");
    if(confirmation){
        let form = new FormData()
        let httpr = new XMLHttpRequest()
        
         httpr.onload = function () {
            let response = JSON.parse(this.response);
            if (response.success){
                let parent=button.parentNode.parentNode;
                let type=parent.querySelector("td[name='type']");
                console.log(type);
                let btn=parent.querySelector('td[name="button"]');
                console.log(btn);

                let typeText="";
                let btnText="";
                if(response.mod==0){
                    typeText = "Customer";
                    btnText=`<button onclick=updateUser(${id},'upgrade',this) class='btn center-block btn-danger'>Upgrade to Admin</button>`;
                }else{
                    typeText="Admin";
                    btnText=`<button onclick=updateUser(${id},'downgrade',this) class='btn btn-warning'>Downgrade to Customer</button>`;
                }
                type.innerHTML=typeText;
                btn.innerHTML=btnText;
            }
        }

        form.append("mod",mod);
        form.append("id", id);
        
        httpr.open("post", "./scripts/updateUser.php");
        httpr.send(form);
    }
    //console.log(confirmation)
}