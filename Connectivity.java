package PracticeAtHome;
import java.util.Map;
import java.util.Properties;
import java.util.concurrent.Executor;
// This code will allow us to connect to database in any methods needed for the database. 
import java.sql.*;
	
public class Connectivity {
		   /**
		    * This is for connecting to the database and printing worked if it worked
		    */ 
		
		public Statement prepareStatement(Statement query) {
			return query;
		}
		
		public void Url() throws SQLException
		{	
			  String url = "jdbc:postgresql://genesisdatabasethesecondcoming.crlaiqpdndku.us-east-2.rds.amazonaws.com:5432/GenesisCreators" ;
			  Properties props = new Properties();
	          props.setProperty("user", "GenesisCreators");
	          props.setProperty("password", "wewillpassthisclass");
	          Connection conn = DriverManager.getConnection(url, props);	
	         //System.out.println("Worked");
		}
	}