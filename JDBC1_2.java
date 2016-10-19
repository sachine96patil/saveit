________________________________________________________________
/* Assignment No 1.2 Upadate Query and Delete Query
Roll No:       */
________________________________________________________________

import java.sql.*;
import java.util.*;
public class JDBC1_2
{
	static final String JDBC_DRIVER="sun.jdbc.odbc.JdbcOdbcDriver";
	static final String DB_URL="jdbc:odbc:TEC";
	static final String USER="system";
	static final String PASS="admin";
public static void main(String[]args)
{
	Connection conn=null;
	Statement stmt=null;
try
{
	Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
	conn=DriverManager.getConnection(DB_URL,USER,PASS);
	stmt=conn.createStatement();
/* Update Query */
	String upsql="UPDATE database SET NAME='Shyam' WHERE id=2;";
	stmt.executeUpdate(upsql);
	System.out.println("Record Updated");	
//Record Display Using Select QUERY	
	System.out.println("Records after Updated");
	String sql="select * from database;";
	ResultSet result = stmt.executeQuery(sql);
	while(result.next())
	{
	System.out.println(result.getInt(1)+"	"+result.getString(2)+ "	" +result.getInt(3));
	}
//Delete Query	
	String delsql="drop table database;";
	stmt.executeUpdate(delsql);
	System.out.println("Table Deleted");

}
catch(SQLException ex)
{
	ex.printStackTrace();
}
catch(Exception e)
{
	e.printStackTrace();
}
finally
{
try
{
if(stmt!=null)
	conn.close();
}
catch(SQLException se)
{
	se.printStackTrace();
}	
}//end try
}//endmain
}