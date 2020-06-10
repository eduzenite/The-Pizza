<h1>Task description</h1>
Let’s imagine you want to start a new pizza delivery business. Please create a small web application for online pizza ordering. The idea is to make a non-existing service where assumed clients can choose a pizza, put it into a cart and make an order.

<h1>Requirements</h1>
<ul>
 <li>The menu page should contain at least 8 pizzas</li> <li>Your clients should be able to choose pizzas directly from the menu</li> <li>You can decide what else you want in the menu</li> <li>Adding a description for each pizza would be a nice decision</li> <li>Don’t proceed to the payment page. The last action from a client will be filling in the order form (address, name, surname, etc.) to get a confirmation that the order has been received</li> <li>A client should be able to put several pizzas into cart, and the quantity must be defined both while outside the cart and in the cart</li> <li>Total price of each order must be calculated and shown in euros and in dollars</li> <li>Don’t forget to add delivery costs to the final bill</li>
</ul>

<h1>Steps</h1>
The steps for the development of this project, will be detailed below and were written as the project progressed.

<h2>1° Step</h2>
The first step will be the creation of the system routes. Before starting to define the routes, I usually make a drawing with the page map on paper. Initially all routes are accessible and I am gradually protecting them with a login system.

<h2>2° Step (part 1)</h2>
After creating the routes, I started creating the views, for that I used Bootstrap 4. I like themes that use this CSS framework, although there are others. At Laravel we used the blade to create templates and to start creating the screens, I created a "layout" folder that will contain the base of the layout.
<ul>
 <li>Home layout created</li>
 <li>The menu already has a link for each of the areas</li>
 <li>The skeleton of the site is also working</li>
 <li>Visual frameworks installed: Bootstrap 4 and Font Awesome 6</li>
</ul>

First commit completed

<hr>

<h2>2° Step (part 2)</h2>
Other system screens were created and I added a lightbox to display the images. There are still a few more screens left for me to start modeling.