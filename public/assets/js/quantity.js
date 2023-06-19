// document.addEventListener('DOMContentLoaded', function() {
//   var quantityInputs = document.querySelectorAll('input[name="quantity"]');
//   var productPrices = document.querySelectorAll('.product-price');
//   var totalElement = document.getElementById('total');

//   function updateProductTotal() {
//     var productTotals = 0;

//     for (var i = 0; i < quantityInputs.length; i++) {
//       var quantity = parseInt(quantityInputs[i].value);
//       var price = parseFloat(productPrices[i].dataset.price);
//       var productTotal = quantity * price;
//       productTotals += productTotal;
//       productPrices[i].textContent = (productTotal / 100) + ' €';
//     }

//     totalElement.textContent = (productTotals / 100) + ' €';
//   }

//   quantityInputs.forEach(function(input) {
//     input.addEventListener('input', updateProductTotal);
//   });

//   updateProductTotal();
// });



// {% extends 'base.html.twig' %}

// {% block title %}Mon panier{% endblock %}


// {% block body %}
// <main class="page-wrapper">
//     {% if cart|length > 0 %}
//      <section class="bg-light text-center p-3">
//             <h1>Mon panier</h1>
//             <h3><a href="{{path('main')}}">Retour aux Catégories produits</a></h3>
//             <h3 ><a href="{{path('cart_removeAll')}}">Vider mon panier</a></h3>
           
//         </section>
//     {% else %}
//          <tr class="text-center"> 
//             <button class="btn btn-danger " >Votre panier est vide</button>
//         </tr>
//     {% endif %}
    
//         <table class= "table bg-light mt-5">
//             <thead>
//                 <tr>         
//                     <th>Id</th>
//                     <th>Image</th>
//                     <th>Produit</th>
//                     <th>Prix</th>
//                     <th>Quantité</th>
//                     <th>total</th>
//                     <th>Action</th>
//                 </tr>
//             </thead>

//             <tbody>
//             {% set total = 0 %}
//             {% for item in cart %}
//             {% set total = total + (item.product.price * item.quantity) %}
//                <tr>
                     
//                         <td class="text-right">{{item.product.id}}</td>
//                         <td><img src="{{ asset('assets/uploads/products/mini/300x300-' ~ item.product.images[0].name) }}" class="img-thumbnail" alt="{{ item.product.name }}"></td>
//                         <td>{{item.product.name}}</td>
//                         <td class="text-right">{{item.product.price / 100}} €</td>
//                         <td class="text-right">{{item.quantity}}</td>
//                         <td class="text-right">{{total / 100}} €</td>
//                         <td>
//                         <a href="{{path('cart_add', {id: item.product.id})}}" class="btn btn-success">+</a> 
//                         <a href="{{path('cart_decrease', {id: item.product.id})}}" class="btn btn-success">-</a> 

//                         <a href="{{path('cart_remove', {id: item.product.id})}}" class="btn btn-success">suprimer</a> 

//                         </td>
//                </tr>
            
//             </tbody>
//         </table>
                    
        

//     {% endfor %}

// </main>
//    <tfoot>
//     <tr>

//         <td colspan="3" class="text-end">Total: {{ total / 100 }} €</td>
        
       
//     </tr>
//    </tfoot>   



 
// {% endblock %}


{/* <main class="page-wrapper">
    {% if cart|length > 0 %}
     <section class="bg-light text-center p-3">
            <h1>Mon panier</h1>
            <h3><a href="{{path('main')}}">Retour aux Catégories produits</a></h3>
            <h3 ><a href="{{path('cart_removeAll')}}">Vider mon panier</a></h3>
           
        </section>
    {% else %}
         <tr class="text-center"> 
            <button class="btn btn-danger " >Votre panier est vide</button>
        </tr>
    {% endif %}
    
        <table class= "table bg-light mt-5">
            <thead>
                <tr>         
                    <th>Id</th>
                    <th>Image</th>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>total</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            {% set total = 0 %}
            {% for item in cart %}
            {% set total = total + (item.product.price * item.quantity) %}
               <tr>
                     
                        <td class="text-right">{{item.product.id}}</td>
                        <td><img src="{{ asset('assets/uploads/products/mini/300x300-' ~ item.product.images[0].name) }}" class="img-thumbnail" alt="{{ item.product.name }}"></td>
                        <td>{{item.product.name}}</td>
                        <td class="text-right">{{item.product.price / 100}} €</td>
                        <td class="text-right">{{item.quantity}}</td>
                        <td class="text-right">{{total / 100}} €</td>
                        <td>
                        <a href="{{path('cart_add', {id: item.product.id})}}" class="btn btn-success">+</a> 
                        <a href="{{path('cart_decrease', {id: item.product.id})}}" class="btn btn-success">-</a> 

                        <a href="{{path('cart_remove', {id: item.product.id})}}" class="btn btn-success">suprimer</a> 

                        </td>
               </tr>
            
            </tbody>
        </table>
                    
        

    {% endfor %}

</main>
   <tfoot>
    <tr>

        <td colspan="3" class="text-end">Total: {{ total / 100 }} €</td>
        
       
    </tr>
   </tfoot>    */}



 




     
     {/* recap commande  */}
     
   {/* <section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">
            
            <h3 class="fw-normal mb-0 text-black">Récapitulatif de la commande<span>({{recapCart|length}} produits)</span></h3>
            {% set total = null %}
            {% for product in recapCart %}
                {% set total = total + (product.product.price * product.quantity) %}
                     <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">

                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="{{ asset('assets/uploads/products/mini/300x300-' ~ product.product.images[0].name) }}" class="img-thumbnail" alt="{{ product.product.name }}">
                                    </div>

                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2">{{ product.product.name }}</p>
                                        <p>
                                            <span class="text-muted">Id:</span> {{ product.product.id }}<br>
                                            <span class="text-muted">Stock:</span> {{ product.product.stock }}
                                        </p>
                                    </div>

                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        <a href="{{path('cart_decrease', {id: product.product.id})}}" class="btn btn-success">-</a> 
                                        <input id="form1" min="0" name="quantity" value="{{ product.quantity }}" type="number" class="form-control form-control-sm" />
                                       <a href="{{path('cart_add', {id: product.product.id})}}" class="btn btn-success">+</a> 
                                    </div>

                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h6 class="mb-4">Prix unitaire: {{ product.product.price / 100}} €</h6>
                                        <h6 class="mb-0">Prix total: {{ product.product.price * product.quantity / 100 }} €</h6>
                                    </div>

                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <a href="{{path('cart_remove', {id: product.product.id})}}" class="text-danger">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
            {% endfor %}
                <div class="card">
                    <div class="row">
                        <div class="card-body col-9">
                            {# <button type="submit" class="btn btn-warning btn-block btn-lg">Emprunters</button> #}
                            <a  href="{{path('orders_index')}}" type="button" class="btn btn-warning btn-block btn-lg">Emprunter</a>
                        </div>
                        <div class="card-body col-3">
                            <h5>total: {{total / 100}} €</h5>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>  */}
     
     
      