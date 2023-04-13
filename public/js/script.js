function showModel(nom,id){
//  console.log(nom, id);
    document.querySelector("#city").value = nom;
    document.querySelector("#category").value = nom;
    document.querySelector("#comment").value = nom;

    document.querySelector("#cityId").value = id;
    document.querySelector("#categoryId").value = id;
    document.querySelector("#commentId").value = id;
    
}

function showComment(nom, id){
 console.log(nom, id);
    document.querySelector("#comment").value = nom;

    document.querySelector("#commentId").value = id;
    
}

function showSubModel(nom,id, catNome, catId){
// console.log(nom + id + catNome + catId)
    document.querySelector("#subCategoryId").value = id;
    document.querySelector("#subCategory").value = nom;

    document.querySelector("#catId").innerText = catNome;
    document.querySelector("#catId").value = catId;
    
}
