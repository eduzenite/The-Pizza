#Task description
Let’s imagine you want to start a new pizza delivery business. Please create a small web application for online pizza ordering. The idea is to make a non-existing service where assumed clients can choose a pizza, put it into a cart and make an order.

#Requirements
- The menu page should contain at least 8 pizzas- Your clients should be able to choose pizzas directly from the menu- You can decide what else you want in the menu- Adding a description for each pizza would be a nice decision- Don’t proceed to the payment page. The last action from a client will be filling in the order form (address, name, surname, etc.) to get a confirmation that the order has been received- A client should be able to put several pizzas into cart, and the quantity must be defined both while outside the cart and in the cart- Total price of each order must be calculated and shown in euros and in dollars- Don’t forget to add delivery costs to the final bill

#Steps
The steps for the development of this project, will be detailed below and were written as the project progressed.

##1 Step
The first step will be the creation of the system routes. Before starting to define the routes, I usually make a drawing with the page map on paper. Initially all routes are accessible and I am gradually protecting them with a login system.

##2 Step
After creating the routes, I started creating the views, for that I used Bootstrap 4. I like themes that use this CSS framework, although there are others. At Laravel we used the blade to create templates and to start creating the screens, I created a "layout" folder that will contain the base of the layout.
- Home layout created
- The menu already has a link for each of the areas
- The skeleton of the site is also working
- Visual frameworks installed: Bootstrap 4 and Font Awesome 6

First commit completed

---
