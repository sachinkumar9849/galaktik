<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

    

        .container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 30px;
         
            
        }

        .main-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 30px;
        }

        .post-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .post-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .post-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            position: relative;
            overflow: hidden;
        }

        .robot-post {
            background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 50%, #fecfef 100%);
        }

        .security-post {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
        }

       

       

      

        .post-content {
            padding: 25px;
        }

        .post-category {
            display: inline-block;
            background: #181d61;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .post-title {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
            line-height: 1.3;
            margin-top: 0;
        }

        .post-meta {
            display: flex;
            align-items: center;
            gap: 15px;
            color: #888;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .post-excerpt {
            color: #666;
            line-height: 1.6;
            font-size: 14px;
        }

        .sidebar {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 25px;
            height: fit-content;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .sidebar-title {
            font-size: 20px;
            font-weight: 700;
            color: #333;
            margin-bottom: 25px;
            padding-bottom: 15px;
                border-bottom: 2px solid #181d61;
        }

        .recent-post {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
            transition: transform 0.2s ease;
            cursor: pointer;
        }

        .recent-post:hover {
            transform: translateX(5px);
        }

        .recent-post:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .recent-post-image {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            flex-shrink: 0;
            position: relative;
        }

        .recent-post-image.robot {
            background: linear-gradient(45deg, #ff9a9e, #fecfef);
        }

        .recent-post-image::after {
            content: '🔒';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 20px;
        }

        .recent-post-image.robot::after {
            content: '🤖';
        }

        .recent-post-content {
            flex: 1;
        }

        .recent-post-category {
            font-size: 10px;
            color: #667eea;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .recent-post-title {
            font-size: 14px;
            font-weight: 600;
            color: #333;
            line-height: 1.3;
            margin-bottom: 5px;
        }

        .recent-post-date {
            font-size: 12px;
            color: #888;
        }

        .presale-chat {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background: #4CAF50;
            color: white;
            padding: 15px 20px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            box-shadow: 0 10px 25px rgba(76, 175, 80, 0.3);
            transition: transform 0.3s ease;
            z-index: 1000;
        }

        .presale-chat:hover {
            transform: translateY(-3px);
        }

        .chat-icon {
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
        }

        @media (max-width: 1024px) {
            .container {
                grid-template-columns: 1fr;
            }
            
            .main-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
                margin: 10px;
            }
            
            .post-image {
                height: 200px;
            }
            
            .post-title {
                font-size: 20px;
            }
        }
    </style>