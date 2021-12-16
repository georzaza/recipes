## todo 
- only show to each user the recipe that he owns.
- update products/ingredients, maybe only keep ingredients?
- add user_id on products/ingredients table(s).
- add categories table (meat, etc)
- add functionality for "search for recipes with X ingredient."
  The frontend for the search bar is already there, what is missing
  is a controller (function or a new controller) and a view to diplay 
  the results. We could delete this frontend and instead create something
  in the layouts.app so that it is available on all pages (something like a sidebar).



## Updates: 

- added some users to the db

- added foreign key user_id on recipes.

- modified db to be compatible with the changes

- added `export_data` folder

- The file 'data' is a soft link to the most recent file in 
`export_data/` folder that contains declarations to populate 
the database. Everything in the `export_data` folder is 
there just to create these kinds of declarations.
