package PracticeAtHome; 
import java.sql.*;
import java.util.*;
// This is the main class where the code is implemented throughout database.
public class  CallingTheGenesisCreators extends Connectivity{  
	
	public static void viewTable(Connectivity con) throws SQLException {	 
         
		 try{
			 String url = "jdbc:postgresql://genesisdatabasethesecondcoming.crlaiqpdndku.us-east-2.rds.amazonaws.com:5432/GenesisCreators" ;
			 Properties props = new Properties();
			 props.setProperty("user", "GenesisCreators");
			 props.setProperty("password", "wewillpassthisclass");
			 Connection conn = DriverManager.getConnection(url, props);
			 Statement stmt = conn.createStatement();
			 System.out.println(stmt);
			 String query = "SELECT username, user_id FROM user_inform";
			 String user = " ";
			 int user_id = 0;
			
		ResultSet rs = stmt.executeQuery(query);
        
		if(rs != null)
		{
			while (rs.next()){
				user = rs.getString("username");
			    user_id = rs.getInt("user_id");
				System.out.println(user + " " + user_id);
			} 
		}
    } catch (SQLException e) {
         System.out.println("SQLException: "  + e.getMessage());
    }
}

	public static void main(String [] args) throws SQLException
	{
		/*
		 * The try catch block is to see if the code can connect to the database
		 * if not it will catch the errors and print it
		 */
		   try {
		   Connection conn =  DriverManager.getConnection(
	       "jdbc:postgresql://genesisdatabasethesecondcoming.crlaiqpdndku.us-east-2.rds.amazonaws.com:5432/GenesisCreators?user=GenesisCreators&password=wewillpassthisclass");

		   // This code use to update and delete unnecessary informationin the database
		  // String newUser = "Tracy Graves";
	     //  String sql = "INSERT INTO user_inform(username, user_id) VALUES(?, ?)";
             String delete = "DELETE FROM user_inform WHERE username = ?";
		 //  PreparedStatement pst = conn.prepareStatement(sql);
		   
		   PreparedStatement del = conn.prepareStatement(delete);
	            
		     //   pst.setString(1, newUser);
	        //    pst.setInt(2, 99378);
	        //    pst.executeUpdate();
	       
	            del.setString(1, "Tracy Graves" );
	            del.executeUpdate();
	            
//	            System.out.println("A new user has been inserted");
		
		   } catch (SQLException e) {
			   System.out.println("SQLException: " + e.getMessage());
			    System.out.println("SQLState: " + e.getSQLState());
			    System.out.println("VendorError: " + e.getErrorCode());
		   }
		   
		   /**
		    * This is for connecting to the database and printing worked if it worked
		    */ 
		Connectivity cc = new Connectivity();
		cc.Url();
	/**
	 * This is to print things from the database to be sure we can access the DB info
	 */
		  viewTable(cc);
      } 
	}	
