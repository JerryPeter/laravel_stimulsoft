<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'app_id' => '1',
            'parent_id' => '0',
            'menu' => 'mnu_dashboard',
            'caption' => 'Dashboard',
            'icon' => 'default.png',
            'class' => 'lnr lnr-home',
            'url' => 'home',
            'target' => '_self',            
            'report' => '',
            'sort' => '10',
            'is_sparator' => '0' ,    
            'is_deleted' => '0',
            'is_active' => '1',
            'created_by' => '0',
            'updated_by' => '0'
        ]);

        Menu::create([
            'app_id' => '1',
            'parent_id' => '0',
            'menu' => 'mnu_designer',
            'caption' => 'Report Designer',
            'icon' => 'default.png',
            'class' => 'lnr lnr-chart-bars',
            'url' => 'pages.designer',
            'target' => '_blank',                 
            'report' => '',
            'sort' => '20',
            'is_sparator' => '0' ,    
            'is_deleted' => '0',
            'is_active' => '1',
            'created_by' => '0',
            'updated_by' => '0'
        ]);    


        Menu::create([
            'app_id' => '1',
            'parent_id' => '0',
            'menu' => 'mnu_sample',
            'caption' => 'Blank Page',
            'icon' => 'default.png',
            'class' => 'lnr lnr-code',
            'url' => 'pages.sample',
            'target' => '_self',                 
            'report' => '',
            'sort' => '25',
            'is_sparator' => '0' ,    
            'is_deleted' => '0',
            'is_active' => '1',
            'created_by' => '0',
            'updated_by' => '0'
        ]); 
                    

        Menu::create([
            'app_id' => '1',
            'parent_id' => '0',
            'menu' => 'mnu_gccs',
            'caption' => 'GCCS Report',
            'icon' => 'default.png',
            'class' => 'lnr lnr-linearicons',
            'url' => 'pages.viewer',
            'target' => '_self',                 
            'report' => '',
            'sort' => '30',
            'is_sparator' => '0' ,    
            'is_deleted' => '0',
            'is_active' => '1',
            'created_by' => '0',
            'updated_by' => '0'
        ]);

        Menu::create([
            'app_id' => '1',
            'parent_id' => '4',
            'menu' => 'mnu_report1',
            'caption' => 'Report GCCS 1',
            'icon' => 'default.png',
            'class' => 'lnr lnr-dice',
            'url' => 'pages.viewer',
            'target' => '_self',                 
            'report' => 'SimpleList.mrt',
            'sort' => '20',
            'is_sparator' => '0' ,    
            'is_deleted' => '0',
            'is_active' => '1',
            'created_by' => '0',
            'updated_by' => '0'
        ]); 
        
        Menu::create([
            'app_id' => '1',
            'parent_id' => '4',
            'menu' => 'mnu_report2',
            'caption' => 'Report Group List',
            'icon' => 'default.png',
            'class' => 'lnr lnr-dice',
            'url' => 'pages.viewer',
            'target' => '_self',                 
            'report' => 'SimpleGroup.mrt',
            'sort' => '20',
            'is_sparator' => '0' ,    
            'is_deleted' => '0',
            'is_active' => '1',
            'created_by' => '0',
            'updated_by' => '0'
        ]);   
                
        Menu::create([
            'app_id' => '1',
            'parent_id' => '0',
            'menu' => 'mnu_viewer',
            'caption' => 'Report Viewer',
            'icon' => 'default.png',
            'class' => 'lnr lnr-code',
            'url' => 'pages.viewer',
            'target' => '_self',                 
            'report' => 'SimpleGroup.mrt',
            'sort' => '26',
            'is_sparator' => '0' ,    
            'is_deleted' => '0',
            'is_active' => '1',
            'created_by' => '0',
            'updated_by' => '0'
        ]);  

        Menu::create([
            'app_id' => '1',
            'parent_id' => '0',
            'menu' => 'mnu_sales',
            'caption' => 'Sales Managment',
            'icon' => 'default.png',
            'class' => 'lnr lnr-chart-bars',
            'url' => 'pages.viewer',
            'target' => '_self',                 
            'report' => '',
            'sort' => '50',
            'is_sparator' => '0' ,    
            'is_deleted' => '0',
            'is_active' => '1',
            'created_by' => '0',
            'updated_by' => '0'
        ]);    
        
        Menu::create([
            'app_id' => '1',
            'parent_id' => '8',
            'menu' => 'mnu_sales',
            'caption' => 'Sales Report',
            'icon' => 'default.png',
            'class' => 'lnr lnr-dice',
            'url' => 'pages.viewer',
            'target' => '_self',                 
            'report' => 'SimpleListWithProtectedJson.mrt',
            'sort' => '10',
            'is_sparator' => '0' ,    
            'is_deleted' => '0',
            'is_active' => '1',
            'created_by' => '0',
            'updated_by' => '0'
        ]);  
        
        Menu::create([
            'app_id' => '1',
            'parent_id' => '8',
            'menu' => 'mnu_sales',
            'caption' => 'Competitor Data',
            'icon' => 'default.png',
            'class' => 'lnr lnr-chart-bars',
            'url' => 'pages.viewer',
            'target' => '_self',                 
            'report' => 'SideBySideListWithContainers.mrt',
            'sort' => '20',
            'is_sparator' => '0' ,    
            'is_deleted' => '0',
            'is_active' => '1',
            'created_by' => '0',
            'updated_by' => '0'
        ]);        
        
        Menu::create([
            'app_id' => '1',
            'parent_id' => '8',
            'menu' => 'mnu_sales',
            'caption' => 'Sales Monitoring',
            'icon' => 'default.png',
            'class' => 'lnr lnr-chart-bars',
            'url' => 'pages.viewer',
            'target' => '_self',                 
            'report' => 'SideBySideListWithContainers.mrt',
            'sort' => '20',
            'is_sparator' => '0' ,    
            'is_deleted' => '0',
            'is_active' => '1',
            'created_by' => '0',
            'updated_by' => '0'
        ]);

        Menu::create([
            'app_id' => '1',
            'parent_id' => '0',
            'menu' => 'mnu_sample',
            'caption' => 'Load Database',
            'icon' => 'default.png',
            'class' => 'lnr lnr-code',
            'url' => 'pages.viewer',
            'target' => '_self',                 
            'report' => 'b2b-menu.mrt',
            'sort' => '26',
            'is_sparator' => '0' ,    
            'is_deleted' => '0',
            'is_active' => '1',
            'created_by' => '0',
            'updated_by' => '0'
        ]);    
    }
}
