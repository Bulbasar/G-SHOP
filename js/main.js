
const TypeWriter = function(txtElement, words, wait = 2000){
  this.txtElement = txtElement;
  this.words = words;
  this.txt = '';
  this.wordIndex = 0;
  this.wait = parseInt(wait, 10);
  this.type();
  this.isDeleting = false;

}

//Type Method
TypeWriter.prototype.type = function(){
    
    const current = this.wordIndex % this.words.length;
    const fullTxt = this.words[current];

    if(this.isDeleting){
        this.txt = fullTxt.substring(0, this.txt.length - 1)
    }else{
        this.txt = fullTxt.substring(0, this.txt.length + 1)
    }

    this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

    let typeSpeed = 100; 

    if(this.isDeleting){
        typeSpeed /= 2;
    }

    if(!this.isDeleting && this.txt === fullTxt){
        typeSpeed = this.wait;

        this.isDeleting = true;
    }else if(this.isDeleting && this.txt === ''){
        this.isDeleting = false;

        this.wordIndex++

        typeSpeed = 300;
    }

    setTimeout(() => this.type(), 300);
}

//Init Dom load
document.addEventListener('DOMContentLoaded', init);

//Init app
function init(){
  const txtElement = document.querySelector('.txt-type');
  const words = JSON.parse(txtElement.getAttribute('data-words'));
  const wait = txtElement.getAttribute('data-wait');

  //Init typewritter

  new TypeWriter(txtElement, words, wait);
}



m_link_1 = document.getElementById("m_link_1");
m_link_2 = document.getElementById("m_link_2");
m_link_3 = document.getElementById("m_link_3");
m_link_4 = document.getElementById("m_link_4");
m_link_5 = document.getElementById("m_link_5");
m_link_6 = document.getElementById("m_link_6");
m_link_7 = document.getElementById("m_link_7");
tb_link_1 = document.getElementById("tb_link_1");
tb_link_2 = document.getElementById("tb_link_2");
tb_link_3 = document.getElementById("tb_link_3");
tb_link_4 = document.getElementById("tb_link_4");
tb_link_5 = document.getElementById("tb_link_5");
tb_link_5a = document.getElementById("tb_link_5a");
tb_link_5b = document.getElementById("tb_link_5b");
menu = document.getElementById("main-nav-menu");

m_link_1.addEventListener("mouseover", function() {
menu.style.display = "block";
tb_link_1.style.display = "table";

tb_link_2.style.display = 'none';
tb_link_3.style.display = 'none';
tb_link_4.style.display = 'none';
tb_link_5.style.display = 'none';

tb_link_5a.style.display = "none";
tb_link_5b.style.display = "none";

});

m_link_2.addEventListener("mouseover", function() {
menu.style.display = "block";
tb_link_2.style.display = "table";

tb_link_1.style.display = 'none';
tb_link_3.style.display = 'none';
tb_link_4.style.display = 'none';
tb_link_5.style.display = 'none';

tb_link_5a.style.display = "none";
tb_link_5b.style.display = "none";
});

m_link_3.addEventListener("mouseover", function() {
menu.style.display = "block";
tb_link_3.style.display = "table";

tb_link_2.style.display = 'none';
tb_link_1.style.display = 'none';
tb_link_4.style.display = 'none';
tb_link_5.style.display = 'none';

tb_link_5a.style.display = "none";
tb_link_5b.style.display = "none";
});


m_link_4.addEventListener("mouseover", function() {
menu.style.display = "block";
tb_link_4.style.display = "table";

tb_link_2.style.display = 'none';
tb_link_3.style.display = 'none';
tb_link_1.style.display = 'none';
tb_link_5.style.display = 'none';

tb_link_5a.style.display = "none";
tb_link_5b.style.display = "none";
});


m_link_5.addEventListener("mouseover", function() {
menu.style.display = "block";
// tb_link_5.style.display = "table";
tb_link_5a.style.display = "table";
tb_link_5b.style.display = "table";

tb_link_2.style.display = 'none';
tb_link_3.style.display = 'none';
tb_link_4.style.display = 'none';
tb_link_1.style.display = 'none';
});

m_link_6.addEventListener("mouseover", function() {
menu.style.display = "none";
tb_link_1.style.display = "none";
tb_link_2.style.display = "none";
tb_link_3.style.display = "none";
tb_link_4.style.display = "none";
tb_link_5.style.display = "none";
});

m_link_7.addEventListener("mouseover", function() {
menu.style.display = "none";
tb_link_1.style.display = "none";
tb_link_2.style.display = "none";
tb_link_3.style.display = "none";
tb_link_4.style.display = "none";
tb_link_5.style.display = "none";
});


menu.addEventListener("mouseover", function() {
menu.style.display = "block";
});

menu.addEventListener("mouseout", function() {
menu.style.display = "none";
tb_link_1.style.display = "none";
tb_link_2.style.display = "none";
tb_link_3.style.display = "none";
tb_link_4.style.display = "none";
tb_link_5.style.display = "none";
});

