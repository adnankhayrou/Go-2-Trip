function showModel(nom,id){
//  console.log(nom, id);
    document.querySelector("#city").value = nom;
    document.querySelector("#category").value = nom;

    document.querySelector("#cityId").value = id;
    document.querySelector("#categoryId").value = id;
    
}

function showComment(cmtID){

    document.querySelector("#cmt-txt-"+cmtID).setAttribute('class', 'd-none');
    document.querySelector("#cmt-input-"+cmtID).value = document.querySelector("#cmt-txt-"+cmtID).innerHTML
    document.querySelector("#form-"+cmtID).setAttribute('class', 'd-block');
    // console.log(document.querySelector("#cmt-input-"+cmtID).value)

}

function showSubModel(nom,id, catNome, catId){
// console.log(nom + id + catNome + catId)
    document.querySelector("#subCategoryId").value = id;
    document.querySelector("#subCategory").value = nom;

    document.querySelector("#catId").innerText = catNome;
    document.querySelector("#catId").value = catId;   
}
