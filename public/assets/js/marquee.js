window.addEventListener("load", function() {
    const marqueeContents2 = document.querySelectorAll(".marquee-content");

    marqueeContents2.forEach((marqueeContent2) => {
        const marqueeItems2 = marqueeContent2.querySelectorAll(".marquee-item");
        const marqueeWidth2 = marqueeItems2.length * (marqueeItems2[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems2[0]).marginLeft));
    
        // Calculate the number of items needed to fill the width of the marquee
        const numberOfItems2 = Math.ceil(marqueeContent2.offsetWidth / (marqueeItems2[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems2[0]).marginLeft)));
    
        // Clone the items
        for (let i = 0; i < numberOfItems2; i++) {
          marqueeItems2.forEach((item) => {
            marqueeContent2.appendChild(item.cloneNode(true));
          });
        }
    
        marqueeContent2.style.width = (marqueeWidth2 * numberOfItems2) + "px";
      });
});

window.addEventListener("load", function() {
    const marqueeContents2 = document.querySelectorAll(".marquee-content2");

    marqueeContents2.forEach((marqueeContent2) => {
        const marqueeItems2 = marqueeContent2.querySelectorAll(".marquee-item2");
        const marqueeWidth2 = marqueeItems2.length * (marqueeItems2[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems2[0]).marginLeft));
    
        // Calculate the number of items needed to fill the width of the marquee
        const numberOfItems2 = Math.ceil(marqueeContent2.offsetWidth / (marqueeItems2[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems2[0]).marginLeft)));
    
        // Clone the items
        for (let i = 0; i < numberOfItems2; i++) {
          marqueeItems2.forEach((item) => {
            marqueeContent2.appendChild(item.cloneNode(true));
          });
        }
    
        marqueeContent2.style.width = (marqueeWidth2 * numberOfItems2) + "px";
      });
});

window.addEventListener("load", function() {
  const marqueeContents2 = document.querySelectorAll(".marquee-content3");

  marqueeContents2.forEach((marqueeContent2) => {
      const marqueeItems2 = marqueeContent2.querySelectorAll(".marquee-item3");
      const marqueeWidth2 = marqueeItems2.length * (marqueeItems2[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems2[0]).marginLeft));
  
      // Calculate the number of items needed to fill the width of the marquee
      const numberOfItems2 = Math.ceil(marqueeContent2.offsetWidth / (marqueeItems2[0].offsetWidth + 2 * parseFloat(getComputedStyle(marqueeItems2[0]).marginLeft)));
  
      // Clone the items
      for (let i = 0; i < numberOfItems2; i++) {
        marqueeItems2.forEach((item) => {
          marqueeContent2.appendChild(item.cloneNode(true));
        });
      }
  
      marqueeContent2.style.width = (marqueeWidth2 * numberOfItems2) + "px";
    });
});