package bOdata;

public class Recipe
{
   private int recipe_id;
   private String recipe_name;
   private int recipe_BOID;
   private int recipe_list_list;
   private String recipe_url;
   private String recipe_img;
   
   public Recipe()
   {
      
   }
   
   public Recipe(int recipe_id, String recipe_name, int recipe_BOID, int recipe_list_list, String recipe_url, String recipe_img)
   {
      this.recipe_BOID = recipe_BOID;
      this.recipe_id = recipe_id;
      this.recipe_name = recipe_name;
      this.recipe_img = recipe_img;
      this.recipe_list_list = recipe_list_list;
      this.recipe_url = recipe_url;
   }
   
   public int getRecipe_id()
   {
      return recipe_id;
   }
   public void setRecipe_id( int recipe_id)
   {
      this.recipe_id = recipe_id;
   }
   public String getRecipe_name()
   {
      return recipe_name;
   }
   public void setRecipe_name( String recipe_name)
   {
      this.recipe_name = recipe_name;
   }
   public int getRecipe_BOID()
   {
      return recipe_BOID;
   }
   public void setRecipe_BOID( int recipe_BOID)
   {
      this.recipe_BOID = recipe_BOID;
   }
   public int getRecipe_list_list()
   {
      return recipe_list_list;
   }
   public void setRecipe_list_list( int recipe_list_list)
   {
      this.recipe_list_list = recipe_list_list;
   }
   public String getRecipe_url()
   {
      return recipe_url;
   }
   public void setRecipe_url( String recipe_url)
   {
      this.recipe_url = recipe_url;
   }
   public String getRecipe_img()
   {
      return recipe_img;
   }
   public void setRecipe_img( String recipe_img)
   {
      this.recipe_img = recipe_img;
   }
}
