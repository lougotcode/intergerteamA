package com.example.aderelemaryidowu.integerhackathon;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.EditText;
import android.widget.ListAdapter;
import android.widget.ListView;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class MainActivity extends AppCompatActivity {
    ListView listView;
    String[] manufacturer_name, drug_name;
    EditText drug;
    String drugSearch;
    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        drug = (EditText) findViewById(R.id.drug_search);
        drugSearch =  drug.getText().toString().toLowerCase();
        drug_name = getResources().getStringArray(R.array.drug_names);
        listView = (ListView) findViewById(R.id.list_item);


    }
        public void search(View view) {

            ArrayList<String> drugList = new ArrayList<String>();
            for (int i = 0; i < drug_name.length; i++) {
                drugSearch =  drug.getText().toString().toLowerCase();
                if(drug_name[i].toLowerCase().contains(drugSearch))
                {
                    drugList.add(drug_name[i]);
                }
            /*if ((drug_name[i].toLowerCase()).contains(drugSearch.toLowerCase())){
                 drugList.add( drug_name[i]);

            }*/

        }
            ArrayAdapter adapter = new ArrayAdapter(this, android.R.layout.simple_list_item_1, drugList);
            listView.setAdapter(adapter);
        }



    public void list(View view) {
        Intent intent = new Intent(this, DrugList.class);
        startActivity(intent);

    }

}
