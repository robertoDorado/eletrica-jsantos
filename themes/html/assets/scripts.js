const linkSeeMore=document.getElementById("linkSeeMore")
if(linkSeeMore){linkSeeMore.addEventListener("click",function(e){e.preventDefault()})};const menuMobile=document.getElementById("menuCategoryMobile")
if(menuMobile){menuMobile.addEventListener("click",function(){const subMenuMobile=document.getElementById("subMenuMobile")
if(!subMenuMobile.classList.contains("show")){subMenuMobile.classList.add("show")
document.getElementById("angleDownIconMobile").classList.remove("fa-angle-down")
document.getElementById("angleDownIconMobile").classList.add("fa-angle-up")}else{subMenuMobile.classList.remove("show")
document.getElementById("angleDownIconMobile").classList.remove("fa-angle-up")
document.getElementById("angleDownIconMobile").classList.add("fa-angle-down")}})}