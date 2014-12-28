package ueasy.it140.database;



import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.OutputStream;

import ueasy.it140.message.Message;
import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;


public class Database extends SQLiteOpenHelper {
	
	public static String DB_PATH = "/data/data/ueasy.it140/databases/";
	public static final String DB_Name = "UEASY";
	
	/*Table names*/
	public static final String Table_Campus = "Campus";
	public static final String Table_Category = "Category";
	public static final String Table_Building = "Building";
	public static final String Table_OtherAmenities = "OtherAmenities";
	public static final String Table_BuildingLevel = "BuildingLevel";
	public static final String Table_Classroom = "Classroom";
	public static final String Table_RoomUtility = "RoomUtility";
	
	/*Campus Variables*/
	public static final String Campus_ID = "c_id";
	public static final String Campus_name = "c_name";
	public static final String Campus_addr = "c_addr";
	public static final String Campus_desc = "c_desc";
	
	/*Category Variables*/
	public static final String Category_ID = "cat_id";
	public static final String Category_name = "cat_name";
	
	/*Building Variables*/
	public static final String Building_ID = "b_id";
	public static final String Building_name = "b_name";
	public static final String Building_desc = "b_desc";
	public static final String Building_pic = "b_pic";
	
	/*Other Amenities Variables*/
	public static final String OtherAmenities_ID = "oa_id";
	public static final String OtherAmenities_name = "oa_name";
	public static final String OtherAmenities_pic = "oa_pic";
	public static final String OtherAmenities_desc = "oa_desc";

	/*Building Level Variables*/
	public static final String BuildingLevel_ID = "bl_id";
	public static final String BuildingLevel_name = "bl_name";
	
	/*Classroom Variables*/
	public static final String Classroom_ID = "cr_id";
	public static final String Classroom_name = "cr_name";
	public static final String Classroom_pic = "cr_pic";
	public static final String Classroom_sched = "cr_sched";
	public static final String Classroom_desc = "cr_desc";
	
	
	/*Room Utility Variables*/
	public static final String RoomUtility_ID = "ru_id";
	public static final String RoomUtility_day = "ru_day";
	public static final String RoomUtility_time = "ru_time";
	public static final String RoomUtility_teacher_name = "ru_teacher_name";
	public static final String RoomUtility_subj_code= "cr_subj_code";
	
		
	
	
	public static final int DB_Version = 1;
	int oldVersion;
	int newVersion;
	private String sql1, sql2, sql3,  sql4, sql5, sql6, sql7;
	private Context context;

	
	
	public Database(Context context){
		super(context, DB_Name,  null, DB_Version);
		this.context = context;
		Message.message(context, "constructor is called");
	}

	@Override
	public void onCreate(SQLiteDatabase db) {
		// TODO Auto-generated method stub
		
		Message.message(context, " onCreate is called");
		try {
			sql1 = "CREATE TABLE "+Table_Campus+"("+Campus_ID+" INTEGER PRIMARY KEY AUTOINCREMENT, "+Campus_name+" VARCHAR(255), "+Campus_addr+" VARCHAR(255), "+Campus_desc+" VARCHAR(255));";
			db.execSQL(sql1);
			
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			Message.message(context, "Campus Error: "+ e);
		}
		
		try {
			sql2 = "CREATE TABLE "+Table_Category+"("+Category_ID+" INTEGER PRIMARY KEY AUTOINCREMENT, "+Campus_ID+" INTEGER, "+Category_name+" VARCHAR(255));";
			db.execSQL(sql2);
			
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			Message.message(context, "Category Error: "+ e);
		}
		
		try {
			sql3 = "CREATE TABLE "+Table_Building+"("+Building_ID+" INTEGER PRIMARY KEY AUTOINCREMENT, "+Campus_ID+" INTEGER, "+Category_ID+" INTEGER, "+Building_name+" VARCHAR(255), "+Building_desc+" VARCHAR(255), "+Building_pic+" VARCHAR(255));";
			db.execSQL(sql3);
			
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			Message.message(context, "Building Error: "+ e);
		}
		
		try {
			sql4 = "CREATE TABLE "+Table_OtherAmenities+"("+OtherAmenities_ID+" INTEGER PRIMARY KEY AUTOINCREMENT, "+Campus_ID+" INTEGER, "+Category_ID+" INTEGER, "+BuildingLevel_ID+" INTEGER, "+OtherAmenities_name+" VARCHAR(255), "+OtherAmenities_desc+" VARCHAR(255), "+OtherAmenities_pic+" VARCHAR(255));";
			db.execSQL(sql4);
			
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			Message.message(context, "OtherAmenities Error: "+ e);
		}
		
		
		try {
			sql5 = "CREATE TABLE "+Table_BuildingLevel+"("+BuildingLevel_ID+" INTEGER PRIMARY KEY AUTOINCREMENT, "+Building_ID+" INTEGER, "+BuildingLevel_name+" VARCHAR(255));";
			db.execSQL(sql5);
			
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			Message.message(context, "BuildingLevel Error: "+ e);
		}
		
		
		try {
			sql6 = "CREATE TABLE "+Table_Classroom+"("+Classroom_ID+" INTEGER PRIMARY KEY AUTOINCREMENT, "+Campus_ID+" INTEGER, "+Category_ID+" INTEGER, "+BuildingLevel_ID+" INTEGER, "+Classroom_name+" VARCHAR(255), "+Classroom_sched+" VARCHAR(255), "+Classroom_desc+" VARCHAR(255), "+Classroom_pic+" VARCHAR(255));";
			db.execSQL(sql6);
			
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			Message.message(context, "Classroom Error: "+ e);
		}
		
		
		try {
			sql7 = "CREATE TABLE "+Table_RoomUtility+"("+RoomUtility_ID+" INTEGER PRIMARY KEY AUTOINCREMENT, "+Classroom_ID+" INTEGER, "+RoomUtility_day+" VARCHAR(255), "+RoomUtility_time+" VARCHAR(255), "+RoomUtility_teacher_name+" VARCHAR(255), "+RoomUtility_subj_code+" VARCHAR(255));";
			db.execSQL(sql7);
			
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			Message.message(context, "RoomUtility Error: "+ e);
		}
		
		

	}

	@Override
	public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
		// TODO Auto-generated method stub
		/*
		Message.message(context, " onUpgrade is called");
		sql = "DROP TABLE IF EXISTS "+Table_Name;
		try {
			db.execSQL(sql);
			onCreate(db);
			
		} catch (android.database.SQLException e) {
			// TODO Auto-generated catch block
			Message.message(context, " "+ e);
		}	
*/
	}
	
	
	
	
	
	public void inserToCampus (String name, String addr, String desc){
		SQLiteDatabase db = this.getWritableDatabase();
		ContentValues values = new ContentValues();
		values.put(Campus_name, name);
		values.put(Campus_addr, addr);
		values.put(Campus_desc, desc);
		long res = db.insert(Table_Campus , null, values);
		
		if(res==-1){
			Message.message(context, "Campus Error Inserting");
	        }
	      
		  else{
			  Message.message(context, "Campus Success Inserting");
	        }
		
		
	}
	
	public void inserToCategory (int campus_id , String name){
		SQLiteDatabase db = this.getWritableDatabase();
		ContentValues values = new ContentValues();
		values.put(Campus_ID, campus_id);
		values.put(Category_name, name);
		long res = db.insert(Table_Category , null, values);
		
		if(res==-1){
			Message.message(context, "Category Error Inserting");
	        }
	      
		  else{
			  Message.message(context, "Category Success Inserting");
	        }
		
	}
	
	public void inserToBuilding (int category_id, int campus_id, String name, String desc, String pic){
		SQLiteDatabase db = this.getWritableDatabase();
		ContentValues values = new ContentValues();
		values.put(Campus_ID, campus_id);
		values.put(Category_ID, category_id);
		values.put(Building_name, name);
		values.put(Building_desc, desc);
		values.put(Building_pic, pic);
		long res = db.insert(Table_Building , null, values);

		if(res==-1){
			Message.message(context, "Building Error Inserting");
	        }
	      
		  else{
			  Message.message(context, "Building Success Inserting");
	        }
	}
	
	public void inserToOtherAmenities (int campus_id, int category_id, int buildingLevel_id, String name, String desc, String pic){
		SQLiteDatabase db = this.getWritableDatabase();
		ContentValues values = new ContentValues();
		values.put(Campus_ID, campus_id);
		values.put(Category_ID, category_id);
		values.put(BuildingLevel_ID, campus_id);
		values.put(OtherAmenities_name, name);
		values.put(OtherAmenities_desc, desc);
		values.put(OtherAmenities_pic, pic);
		long res = db.insert(Table_OtherAmenities , null, values);
		
		
		if(res==-1){
			Message.message(context, "OtherAmenities Error Inserting");
	        }
	      
		  else{
			  Message.message(context, "OtherAmenities Success Inserting");
	        }
	}
	
	public void inserToBuildingLevel (int building_id, String name){
		SQLiteDatabase db = this.getWritableDatabase();
		ContentValues values = new ContentValues();
		values.put(Building_ID, building_id);
		values.put(BuildingLevel_name, name);
		long res = db.insert(Table_BuildingLevel , null, values);
		
		
		if(res==-1){
			Message.message(context, "BuildingLevel Error Inserting");
	        }
	      
		  else{
			  Message.message(context, "BuildingLevel Success Inserting");
	        }
	}
	
	public void inserToClassroom (int campus_id, int buildingLevel_id, int category_id, String name, String sched, String desc, String pic){
		SQLiteDatabase db = this.getWritableDatabase();
		ContentValues values = new ContentValues();
		values.put(Campus_ID, campus_id);
		values.put(Category_ID, category_id);
		values.put(BuildingLevel_ID, campus_id);
		values.put(Classroom_name, name);
		values.put(Classroom_desc, desc);
		values.put(Classroom_pic, pic);
		values.put(Classroom_sched, sched);
		long res = db.insert(Table_Classroom , null, values);
		
		if(res==-1){
			Message.message(context, "Classroom Error Inserting");
	        }
	      
		  else{
			  Message.message(context, "Classroom Success Inserting");
	        }
	}
	
	public void inserToRoomUtility (int classroom_id, String day, String time, String teacherName, String subjectCode){
		SQLiteDatabase db = this.getWritableDatabase();
		ContentValues values = new ContentValues();
		values.put(Classroom_ID, classroom_id);
		values.put(RoomUtility_day, day);
		values.put(RoomUtility_time, time);
		values.put(RoomUtility_teacher_name, teacherName);
		values.put(RoomUtility_subj_code, subjectCode);
		long res = db.insert(Table_RoomUtility , null, values);
		
		
		if(res==-1){
			Message.message(context, "RoomUtility Error Inserting");
	        }
	      
		  else{
			  Message.message(context, "RoomUtility Success Inserting");
	        }
	}
	
	
	/*------
	public long inserToDB (String F, String L){
		 SQLiteDatabase db = this.getWritableDatabase();
		 
		 ContentValues values = new ContentValues();
		  values.put(T_FName, F); // First Name
		  values.put(T_LName, L);// First Name
		  
		  //inserting Values
		  
		  long res =  db.insert(Table_Name , null, values);
		 // db.close();
		  /*
		  
		  if(res==-1){
	        	Toast.makeText(context, "Failed to Insert" , Toast.LENGTH_LONG).show();
	        }
	      
		  else{
	        	Toast.makeText(context, "Succeed to Insert", Toast.LENGTH_LONG).show();
	        }
			*/
	
	/*------
		  return res;
	}
	
	
	
	
	public String getAllData (){
		SQLiteDatabase db = this.getWritableDatabase();
		
		String[] columns = {ID, T_FName, T_LName};
		Cursor cursor = db.query(Table_Name, columns, null, null, null, null, null);
		StringBuffer buffer = new StringBuffer();
		
		buffer.append(" ID Fname Lname \n");
		
		while(cursor.moveToNext()){
			int ndx1 = cursor.getColumnIndex(T_FName);
			int ndx2 = cursor.getColumnIndex(T_LName);
			int ndx3 = cursor.getColumnIndex(ID);
			buffer.append(" "+ cursor.getInt(ndx3)+" "+ cursor.getString(ndx1) +" "+ cursor.getString(ndx2) + "\n");
		}
		
		return buffer.toString();
	}
/*	
	public int getData(String F, String L){
		int flag=0;
		
		SQLiteDatabase db = this.getWritableDatabase();
		
		String[] columns = {T_FName, T_LName};
		Cursor cursor = db.query(Table_Name, columns, null, null, null, null, null);
		while(cursor.moveToNext()){
			int ndx1 = cursor.getColumnIndex(T_FName);
			int ndx2 = cursor.getColumnIndex(T_LName);
			int ndx3 = cursor.getColumnIndex(ID);
			buffer.append(" "+ cursor.getInt(ndx3)+" "+ cursor.getString(ndx1) +" "+ cursor.getString(ndx2) + "\n");
		}
		
		return buffer.toString();
	}
	
*/	
	
	/*----------
	public int DelData(String Fname, String Lname){
		
		SQLiteDatabase db = this.getWritableDatabase();
		String[] whereArgs={Fname, Lname};
		int ret = db.delete(Table_Name, T_FName+"=? AND "+T_LName+" =?" , whereArgs);
		
		return ret;
	}


	public int updateFname(String NewName, String OldName){
		SQLiteDatabase db = this.getWritableDatabase();
		
		 ContentValues values = new ContentValues();
		 values.put(T_FName, NewName);
		 String[] whereArgs={OldName};
		int ret = db.update(Table_Name, values, T_FName+"=?", whereArgs);
		
		return ret;
	}
	
	
	public int updateLname(String NewName, String OldName){
		SQLiteDatabase db = this.getWritableDatabase();
		
		 ContentValues values = new ContentValues();
		 values.put(T_LName, NewName);
		 String[] whereArgs={OldName};
		int ret = db.update(Table_Name, values, T_LName+"=?", whereArgs);
		
		return ret;
	}
	
	*/
	
	public void copyDataBase() throws IOException{
	
		
        //Open your local db as the input stream
        InputStream myInput = context.getAssets().open(DB_Name);

        // Path to the just created empty db
        String outFileName = DB_PATH + DB_Name;

        //Open the empty db as the output stream
        OutputStream myOutput = new FileOutputStream(outFileName);

        //transfer bytes from the inputfile to the outputfile
        byte[] buffer = new byte[1024];
        int length;
        while ((length = myInput.read(buffer))>0){
            myOutput.write(buffer, 0, length);
        }

        //Close the streams
        myOutput.flush();
        myOutput.close();
        myInput.close();

    }//end of copyDataBase() method
	
	
	
	
	
	
	
	public String[] ClassroomCode (String roomCode){
		
		int ctr=0;
		SQLiteDatabase db = this.getWritableDatabase();
		String[] retVal = new String[10];
		String[] columns = {Classroom_name};
		String[] args = {roomCode+"%"};
		Cursor cursor = db.query(Table_Classroom, columns, Classroom_name +" LIKE ?", args, null, null, null);
			
		for(int a=0; a<10; a++){
			retVal[a]=null;
		}
		
		while(cursor.moveToNext()){
			int ndx1 = cursor.getColumnIndex(Classroom_name);
			retVal[ctr]= cursor.getString(ndx1);
			ctr++;
		}
		
				
		return retVal;
		
	}
	
	
	public String[] BuildingName(){
		SQLiteDatabase db = this.getWritableDatabase();
		int ctr=0;
		int max=5;
		String[] retVal = new String[max];
		
		for(int a=0; a<max; a++){
			retVal[a]=null;
		}
		
		String[] columns = {Building_name};
		Cursor cursor = db.query(Table_Building, columns, null, null, null, null, null);
				
		while(cursor.moveToNext() && ctr<max){
			int ndx1 = cursor.getColumnIndex(Building_name);
			retVal[ctr] = cursor.getString(ndx1);
			ctr++;
		}
		
		for(int b=0; b<ctr && retVal[b]!=null ; b++){
			Message.message(context, ""+retVal[b]);
		}
		
		return retVal;
	}
	
	
	public String[] OAName (){
		
		int ctr=0;
		int max=4;
		SQLiteDatabase db = this.getWritableDatabase();
		String[] retVal = new String[max];
			
		for(int a=0; a<max; a++){
			retVal[a]=null;
		}
		
		String[] columns2 = {OtherAmenities_name};
		Cursor cursor2 = db.query(Table_OtherAmenities, columns2, null, null, null, null, null);
		
		while(cursor2.moveToNext() && ctr<max){
			int ndx2 = cursor2.getColumnIndex(OtherAmenities_name);
			retVal[ctr] = cursor2.getString(ndx2);
			ctr++;
		}
		
		
		return retVal;
	}
	

	
	
	public String[] getAllAmenityName(){
		SQLiteDatabase db = this.getWritableDatabase();
		
		int max=24;
		String[] retVal = new String[max];
		int ctr=0;
		
		for(int a=0; a<max; a++){
			retVal[a]=null;
		}
		
		
		
		//Retrieving all names of Building
		String[] columns = {Building_name};
		Cursor cursor = db.query(Table_Building, columns, null, null, null, null, null);
				
		while(cursor.moveToNext() && ctr<max){
			int ndx1 = cursor.getColumnIndex(Building_name);

			retVal[ctr] = cursor.getString(ndx1);
			ctr++;
		}
				
		if(ctr<=max){
			//Retrieving all names of Classroom
			String[] columns2 = {Classroom_name};
			Cursor cursor2 = db.query(Table_Classroom, columns2, null, null, null, null, null);
			
			while(cursor2.moveToNext() && ctr<max){
				int ndx2 = cursor2.getColumnIndex(Classroom_name);
				retVal[ctr] = cursor2.getString(ndx2);
				ctr++;
			}
		}
		
		
		if(ctr<max){
			//Retrieving all names of Other Amenities
			String[] columns2 = {OtherAmenities_name};
			Cursor cursor2 = db.query(Table_OtherAmenities, columns2, null, null, null, null, null);
			
			while(cursor2.moveToNext() && ctr<max){
				int ndx2 = cursor2.getColumnIndex(OtherAmenities_name);
				retVal[ctr] = cursor2.getString(ndx2);
				ctr++;
			}
		}
		
		
		/*
		 //Displaying the retrieved data 
		for(int b=0; b<ctr && retVal[b]!=null ; b++){
			Message.message(context, ""+retVal[b]);
		}
		
		*/
		return retVal;
		


	}
	
	
	
}
