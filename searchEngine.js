// const products=[
//     {
//     id:1,
//     image:'pics/coffeeSrch.jpeg',
//     title:"product1",
//     price:10
//     },
//     {
//     id:2,
//     image:'pics/coffeeSrch.jpeg',
//     title:"product2",
//     price:10
//     },
//     {
//     id:3,
//     image:'pics/coffeeSrch.jpeg',
//     title:"product3",
//     price:10
//     },
//     {
//     id:4,
//     image:'pics/coffeeSrch.jpeg',
//     title:"product4",
//     price:10
//     },
//     {
//     id:5,
//     image:'pics/coffeeSrch.jpeg',
//     title:"product5",
//     price:10
//     },
//     {
//     id:6,
//     image:'pics/coffeeSrch.jpeg',
//     title:"product6",
//     price:10
//     }
// ]
// const products = [
//     {
//       id: 1,
//       image: 'pics/pic1.jpg',
//       title: "product1",
//       price: 10
//     },
//     // ... other products
//   ];
  
//   const productContainer = document.querySelector('.products-container');  // Target the container
  
//   document.getElementById('search-box').addEventListener('keyup', (e) => {
//     const searchData = e.target.value.toLowerCase();
//     const filteredProducts = products.filter((item) =>
//       item.title.toLowerCase().includes(searchData)
//     );
  
//     displayProducts(filteredProducts);
//   });
  
//   function displayProducts(products) {
//     productContainer.innerHTML = products.map((item) => {
//       const { image, title, price } = item;
//       return (
//         `<div class="product-box">
//           <img src="${image}" alt="${title}" class="product-image">
//           <div class="product-details">
//             <p class="product-title">${title}</p>
//             <p class="product-price">LKR ${price}.00</p>
//             <button class="add-to-cart">Add to Cart</button> </div>
//         </div>`
//       );
//     }).join('');
//   }
document.addEventListener('DOMContentLoaded', function () {
  const searchBtn = document.querySelector('#search-btn');
  const searchForm = document.querySelector('.search-form');

  searchBtn.addEventListener('click', function () {
      searchForm.classList.toggle('active');
  });

  // Close search form when clicking outside
  document.addEventListener('click', function (e) {
      if (!searchBtn.contains(e.target) && !searchForm.contains(e.target)) {
          searchForm.classList.remove('active');
      }
  });
});


