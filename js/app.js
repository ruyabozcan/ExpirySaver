$(document).ready(function () {
    console.log("ExpirySaver is ready!");
  
    // Örnek teklifler
    const offers = [
      { name: "Fresh Bread", price: "$1.00", discount: "50%", description: "Bakery-fresh bread available until 6 PM." },
      { name: "Milk (1L)", price: "$0.50", discount: "30%", description: "Get fresh milk at a great price." },
      { name: "Vegetable Box", price: "$2.50", discount: "40%", description: "A box of assorted fresh vegetables." }
    ];
  
    // Teklifleri yükleme
    const offerList = $(".offer-list");
    offers.forEach((offer) => {
      const offerCard = `
        <div class="offer">
          <h3>${offer.name}</h3>
          <p>${offer.description}</p>
          <p class="price">${offer.price}</p>
          <p class="discount">Discount: ${offer.discount}</p>
        </div>
      `;
      offerList.append(offerCard);
    });
  });
  