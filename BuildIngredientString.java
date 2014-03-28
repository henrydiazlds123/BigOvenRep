import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class BuildIngredientString {
   // JDBC driver name and database URL
   static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";  
   static final String DB_URL = "jdbc:mysql://cs313awesomesquared.cr3nazmupmxl.us-east-1.rds.amazonaws.com/BORecipies?user=segfault&password=wurger12";

   //  Database credentials (don't seem to need)
   /*
   static final String USER = "guest";
   static final String PASS = "password";
   */
   
   String response = "";
   
   public void run() {
   Connection conn = null;
   Statement stmt = null;
   try{
      //STEP 2: Register JDBC driver
      Class.forName("com.mysql.jdbc.Driver");

      //STEP 3: Open a connection
      System.out.println("Connecting to database...");
      conn = DriverManager.getConnection(DB_URL);

      //STEP 4: Execute a query
      System.out.println("Creating statement...");
      stmt = conn.createStatement();
      String sql;
      sql = "Select * from ingredient";
      ResultSet rs = stmt.executeQuery(sql);

      //STEP 5: Extract data from result set
      while(rs.next()){
         //Retrieve by column name
         String name = rs.getString("ing_name");

         response += name + "<br />";
        
         
      }
      //STEP 6: Clean-up environment
      rs.close();
      stmt.close();
      conn.close();
   }catch(SQLException se){
      //Handle errors for JDBC
	  response += "  FAILED1!";
	  response += "  SQLException: " + se.getMessage();
	  response += "  SQLState: " + se.getSQLState();
	  response += "  VendorError: " + se.getErrorCode();
      se.printStackTrace();
   }catch(Exception e){
      //Handle errors for Class.forName
	   response += "  FAILED2!";
      e.printStackTrace();
   }finally{
      //finally block used to close resources
      try{
         if(stmt!=null)
            stmt.close();
      }catch(SQLException se2){
      }// nothing we can do
      try{
         if(conn!=null)
            conn.close();
      }catch(SQLException se){
         se.printStackTrace();
      }//end finally try
   }//end try
   System.out.println("Goodbye!");
}//end main
}//end FirstExample